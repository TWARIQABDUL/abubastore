export const rootPaths = {
  homeRoot: '/',
  authRoot: 'authentication',
  errorRoot: 'error',
};

export default {
  home: `/${rootPaths.homeRoot}`,
  login: `/${rootPaths.authRoot}/login`,
  signup: `/${rootPaths.authRoot}/sign-up`,
  addproduct: `/${rootPaths.homeRoot}/addproduct`,

  404: `/${rootPaths.errorRoot}/404`,
};
