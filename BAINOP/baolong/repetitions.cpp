#include <bits/stdc++.h>
using namespace std;
int main()
{
	freopen("repetitions.inp","r",stdin);
	freopen("repetitions.out","w",stdout);
	int dem=1;
	int ans;
	string s;
	for (int i = 1;i<= s.size(); i++) {
        if (s[i] == s[i - 1]) dem++;
        if (s[i] != s[i - 1] ){
			ans = max(ans,dem);
			dem= 1;
        }
	}
	cout << ans;
}


